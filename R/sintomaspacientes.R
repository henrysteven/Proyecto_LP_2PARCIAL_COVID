library("RMySQL")
db_user <- 'MRW5QqWySG'
db_password <- '1bHwPnObOa'
db_name <- 'MRW5QqWySG'
db_table <- 'Persona'
db_host <- 'remotemysql.com' # for local access
db_port <- 3306
# 3. Read data from db
setwd(dirname(rstudioapi::getSourceEditorContext()$path))
mydb <-  dbConnect(MySQL(), user = db_user, password = db_password,
                   dbname = db_name, host = db_host, port = db_port)
s <- paste0("select * from ", db_table)
rs <- dbSendQuery(mydb, s)
df <-  fetch(rs, n = -1)
df
sintomas <- df$sintomas[df$covid != "no"]
data <- data.frame(table(sintomas))
percents <- (data$Freq/sum(data$Freq))*100
percents
lbls <- data$sintomas
lbls <- paste(lbls, percents)
lbls <- paste(lbls, "%", sep="")
lbls
setwd("..")
getwd()
png(filename = "imagenes\\piecharsintomas.png", width = 500, height = 500)
pie(data$Freq, labels = lbls, col = rainbow(length(lbls)),main = "Piechart de sintomas de pacientes")
dev.off()
on.exit(dbDisconnect(mydb))


