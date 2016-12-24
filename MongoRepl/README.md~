### MONGODO REPLICATION ON LOCALHOST, UBUNTU SINGLE SERVER.

README
	Setting up Mongodb Replication on single ubuntu machine with 3 nodes on different ports. 
> Instructions
	* Make 3 Directories (master,slave,slave).
	* Create logs, mongodb.conf,db directories.
	* Change confid for 1st, define the port number on which instance whould run and set    replSet = NAMEOFSET.
    * set dbpath like :dbpath=/home/yash/Documents/dev/mongodb/1/db/
	    * port 27027
	    * replSet = testset
	* COMMANDS FOR PRIMARY:
	    * sudo mongod -f mongod.conf
	    * do step (3)
	    * sudo mongo 127.0.0.0.1:27027
	    * rs.initiate()
	    * rs.add()
	    * rs.config()
	    sudo tail -f mongod.log
	* SECONDARY COMMANDS:
	    * sudo mongod -f mongod.conf
	    * sudo mongo 127.0.0.1:27028
    
End Of README.


