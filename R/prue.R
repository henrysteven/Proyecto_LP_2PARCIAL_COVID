library("RMySQL")
db_user <- 'MRW5QqWySG'
db_password <- '1bHwPnObOa'
db_name <- 'MRW5QqWySG'
db_table <- 'Persona'
db_table2 <- 'Fallecidos'
db_host <- 'remotemysql.com' # for local access
db_port <- 3306
# 3. Read data from db

Sys.setenv(LANGUAGE="es")
mydb <-  dbConnect(MySQL(), user = db_user, password = db_password,
                   dbname = db_name, host = db_host, port = db_port)
s <- paste0("select * from ", db_table2)
rs <- dbSendQuery(mydb, s)
df <-  fetch(rs, n = -1)
df

library(lubridate)
causa_muerte_oficial <- df$causa_muerte_oficial
sexo <- df$sexo

datos <- data.frame(causa_muerte_oficial,sexo)
View(datos$causa_muerte_oficial)
datos2 <- datos[datos$causa_muerte_oficial=="otro",]

View(datos2)
barplot(table(datos2$sexo))














