DROP TABLE IF EXISTS Antworten;
DROP TABLE IF EXISTS Fragen;


CREATE TABLE Fragen
       (Fid         INTEGER PRIMARY KEY AUTO_INCREMENT,
        Frage       VARCHAR(60) NOT NULL,
        Url			VARCHAR(200)
       )ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Antworten 
		(Aid 		INTEGER PRIMARY KEY AUTO_INCREMENT,
		Antwort 	VARCHAR(300) NOT NULL,
		Stimmen		INTEGER,
		Fid			INTEGER,
		FOREIGN KEY (Fid) References Fragen(Fid) ON DELETE CASCADE
		

		)
		ENGINE=InnoDB DEFAULT CHARSET=utf8;
