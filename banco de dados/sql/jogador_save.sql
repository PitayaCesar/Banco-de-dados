CREATE TABLE Jogador_Save(
	Save_Cod Integer NOT NULL UNIQUE,
	Jog_Id VARCHAR(3) NOT NULL UNIQUE,
	Nick VARCHAR(8) NOT NULL,
	Nivel Integer NOT NULL,
	Score Integer NOT NULL,
	PRIMARY KEY(Save_Cod,Jog_id)
)

