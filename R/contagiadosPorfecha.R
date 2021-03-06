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

library(lubridate)
covid <- df$covid
fecha <- df$fecha
fecha1 <- parse_date_time(fecha,"ymd")
datos <- data.frame(covid,fecha1)
datos$fecha1 <- format(datos$fecha1, format="%Y-%B") 
datos2 <- datos[datos$covid=="si",]

par(mar= c(10, 4.5, 2, 2) + 0.1)
barplot(table(datos2$fecha), main="Cantidad de contagiados de COVID-19 por A�o y Mes",las=2,col=c("green3","red"),ylim = c(0,25)
        ,border = 1,ylab = "N�mero de contagiados")

dev.off()
on.exit(dbDisconnect(mydb))




