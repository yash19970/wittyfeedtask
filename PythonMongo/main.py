from pymongo import MongoClient
client = MongoClient('localhost:27017')
db = client.EmpData
def main():
	print('Enter 1: Create, 2: Read, 3: Update, 4: Delete')
	inputData = raw_input()
	if inputData == '1':
		insertData()
	elif inputData == '2':
		readData()
	elif inputData == '3':
		updateData()
	elif inputData == '4':
		deleteData()
	else:
		print('Wronge Input.')

def insertData():
	try:
		empId = raw_input('Enter the ID')
		empName = raw_input('Enter the name')
		empSalary = raw_input('Enter the Salary')
		db.emp.insert_one({
			"id" 	: empId,
			"name" 	: empName,
			"salary": empSalary
			})
	except Exception, e: 
		print str(e)

def readData():
	try:
		result = db.emp.find()
		print('All data in the Database:')
		for res in result:
			print res['name']
			print res['salary']
	except Exception, e: 
		print str(e)

def updateData():
	try:
		condition = raw_input('Enter the ID')
		newName = raw_input('Enter the name')
		newSalary = raw_input('Enter the Salary')
		db.emp.update_one(
			{"id" 	: condition},
			{
			"$set"  :	{
					"name" 	: newName,
					"salary": newSalary
					}
			}
			)
	except Exception, e: 
		print str(e)
def deleteData():
	try:
		empId = raw_input('Enter the ID')
		db.emp.delete_many({
			"id" 	: empId
			})
	except Exception, e: 
		print str(e)
if __name__ == "__main__":
    main()