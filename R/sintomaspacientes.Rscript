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
hospital <- df$hospitalizado
sintomas <- df$sintomas
data <- data.frame(hospital,sintomas)
data
setwd("..")
getwd()
png(filename = "imagenes\\sintomascovid.png", width = 500, height = 500)
barplot(table(data), col = c("blue","red"), beside = TRUE)
legend("topright", c("no hospitalizado","hospitalizado"),fill= c("blue","red"))
dev.off()
on.exit(dbDisconnect(mydb))

