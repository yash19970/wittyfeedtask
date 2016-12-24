### MONGODO REPLICATION ON LOCALHOST, UBUNTU SINGLE SERVER.

README
	Setting up Mongodb Replication on single ubuntu machine with 3 nodes on different ports. 
> Instructions
1. Make 3 Directories (master,slave,slave).
2. Create logs, mongodb.conf,db directories.
3. Change confid for 1st, define the port number on which instance whould run and set    replSet = NAMEOFSET.
    3.2 set dbpath like :dbpath=/home/yash/Documents/dev/mongodb/1/db/
    3.3 port 27027
    3.4 replSet = testset
4. COMMANDS FOR PRIMARY:
    4.1 sudo mongod -f mongod.conf
    4.2 do step (3)
    4.3 sudo mongo 127.0.0.0.1:27027
    4.4 rs.initiate()
    4.5 rs.add()
    4.6 rs.config()
    sudo tail -f mongod.log
5. SECONDARY COMMANDS:
    5.1 sudo mongod -f mongod.conf
    5.2 sudo mongo 127.0.0.1:27028
    
End Of README.


