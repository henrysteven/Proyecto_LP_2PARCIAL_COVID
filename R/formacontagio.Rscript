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
formacontagio <- df$forma_contagio[df$covid != "no"]
data <- data.frame(table(formacontagio))
percents <- format(round((data$Freq/sum(data$Freq))*100,2),nsmall = 2)
percents
setwd('..')
lbls <- data$formacontagio
lbls <- paste(lbls, percents)
lbls <- paste(lbls, "%", sep="")
png(filename = "imagenes\\formacontagio.png",width = 10, height = 6, units = 'in', res = 300)

pie(data$Freq, labels = lbls, col = rainbow(length(lbls)),main = "Piechart de formas de contagio")
dev.off()
on.exit(dbDisconnect(mydb))


