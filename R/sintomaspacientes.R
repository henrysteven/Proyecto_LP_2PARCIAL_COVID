library("RMySQL")
db_user <- 'MRW5QqWySG'
db_password <- '1bHwPnObOa'
db_name <- 'MRW5QqWySG'
db_table <- 'Persona'
db_host <- 'remotemysql.com' # for local access
db_port <- 3306
# 3. Read data from db
mydb <-  dbConnect(MySQL(), user = db_user, password = db_password,
                   dbname = db_name, host = db_host, port = db_port)
s <- paste0("select * from ", db_table)
rs <- dbSendQuery(mydb, s)
df <-  fetch(rs, n = -1)
hospital <- df$hospitalizado
sintomas <- df$sintomas
i <- 1
unicossintomas <- c()
sintomas
for(sintomaarray in sintomas){
  sintomaarray
  sintomasplit <- strsplit(sintomaarray, ",")
  sintomasplit
  if(sintomaarray != ""){
    for(sintoma2 in sintomasplit){
      for(sintomaunico in sintoma2){
        check<- substring(sintomaunico,1,1)
        if(check == " "){
          sintomaunico <- substring(sintomaunico,2)
        }
        if(!is.element(sintomaunico,unicossintomas)){
          unicossintomas[i] <- sintomaunico
          i <- i+1
        }
      }
    }
  }
}
sihospitalizados <- numeric(length(unicossintomas))
nohospitalizados <- numeric(length(unicossintomas))
i <- 1
for(sintomaarray in sintomas){
  sintomaarray
  sintomasplit <- strsplit(sintomaarray, ",")
  sintomasplit
  if(sintomaarray != ""){
    for(sintoma2 in sintomasplit){
      for(sintomaunico in sintoma2){
        check<- substring(sintomaunico,1,1)
        if(check == " "){
          sintomaunico <- substring(sintomaunico,2)
        }
        index = which(sintomaunico == unicossintomas)[[1]]
        if(hospital[i] == "si"){
          sihospitalizados[index] = sihospitalizados[index] +1
        }
        if(hospital[i] == "no"){
          nohospitalizados[index] = nohospitalizados[index] +1
        }
      }
    }
  }
  i <- i+1
}
data <- data.frame(unicossintomas,sihospitalizados,nohospitalizados)

value_matrix <- matrix( nrow = 2, ncol = length(unicossintomas))
value_matrix[1,]<- data$sihospitalizados
value_matrix[2,]<- data$nohospitalizados
setwd('..')
png(filename = "imagenes\\sintomaspacientes.png",width = 10, height = 10, units = 'in', res = 300)
par(mar= c(10, 4.5, 2, 2) + 0.1)
barplot(value_matrix,names.arg = unicossintomas, col = c("red","blue"), beside = TRUE, las = 2, cex.names = 0.70)
legend("topleft", c("hospitalizado","no hospitalizado"),fill= c("red","blue"), cex = 0.75)
dev.off()
on.exit(dbDisconnect(mydb))

