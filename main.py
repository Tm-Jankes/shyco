from telegram.ext import Updater,CommandHandler,MessageHandler,Filters

def start(update,context):
    update.message.reply_text("Welcome")

def text(update,context):
    message = update.message.text
    update.message.reply_text(message)

updater = Updater("5363480746:AAG5v1UU1t8mNfPu0Q4-VZKp2wEA-_ziuHc",use_context=True)


updater.dispatcher.add_handler(CommandHandler("start",start))

updater.dispatcher.add_handler(MessageHandler(Filters.text,text))

updater.start_polling()
