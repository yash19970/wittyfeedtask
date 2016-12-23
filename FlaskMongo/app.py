from flask import Flask, render_template 
from flask.ext.pymongo import PyMongo
app = Flask(__name__)
app.config['MONGO_DBNAME'] = 'EmpData' 
app.config['MONGO_URI'] = 'mongodb://localhost/EmpData'
mongo = PyMongo(app)


@app.route('/')
def index():
	return render_template('login.html') 

@app.route('/find')
def find():
	user = mongo.db.users
	result = user.find_one({'name':'yash'})
	#return render_template(,'show.html')
	return result['name']+result['org'] 

@app.route('/add')
def add():
	user = mongo.db.users
	user.insert({'name' : 'ritik', 'org'  : 'wittyfeed'})
	user.insert({'name' : 'sumit', 'org'  : 'viral9'})
	return	'Added user!'
if __name__ == "__main__":
	app.run(debug=True)