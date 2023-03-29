CREATE TABLE `signup` (
  `username` varchar(20) NOT NULL ,
  `password` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ;
CREATE TABLE `contact` (
  `username` varchar(20) NOT NULL ,
  `conatct` varchar(255) NOT NULL,
  `contactname` varchar(255) NOT NULL,
) ;

