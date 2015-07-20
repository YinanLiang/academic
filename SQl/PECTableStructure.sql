CREATE TABLE academic.PEC (
        id INT(11) NOT NULL AUTO_INCREMENT,
        pecno INT(11),
        caseno INT(11),
        date_pec DATE,
        name VARCHAR (128),
        fee INT(11),
        rno INT(11),
        date_payment DATE,
        board VARCHAR(128),
        exam VARCHAR(128),
        admission VARCHAR(128),
        fecno INT(11),
        date_fec DATE,
        faculty VARCHAR(128),
        dept VARCHAR(128),
        session VARCHAR(128),
        PRIMARY KEY (id)
)