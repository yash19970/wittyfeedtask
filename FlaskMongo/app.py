from flask import Flask, render_template, url_for, request , session, redirect 
from flask.ext.pymongo import PyMongo
app = Flask(__name__)
app.config['MONGO_DBNAME'] = 'EmpData' 
app.config['MONGO_URI'] = 'mongodb://localhost/EmpData'
mongo = PyMongo(app)

@app.route('/dashboard')
def dashboard():
	users = mongo.db.users
	result = users.find()
	print result
	return render_template('show.html',result=result)

@app.route('/insertdata', methods = ['POST','GET'])
def insertdata():
	if request.method == 'POST':
		users = mongo.db.users
		result = users.insert({'org':request.form['org'], 'name' : request.form['name']})
		return redirect(url_for('insertdata'))
	return render_template('dashboard.html')

 
@app.route('/deleteData', methods = ['POST','GET'])
def deleteData():
	if request.method == 'POST':
		condition = request.form['name']
		users = mongo.db.users
		result = users.delete_many({'name': request.form['name']})
		return redirect(url_for('deleteData'))
	return render_template('delete.html')
if __name__ == "__main__":
	app.run(debug=True)