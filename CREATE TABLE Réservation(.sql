CREATE TABLE Réservation(
    id_Réservation int PRIMARY KEY AUTO_INCREMENT,
    Date_Réservation DATE NOT NULL,
    Time_Réservation TIME NOT NULL,
    Nombre int DEFAULT 1,
    id_Menu int NOT NULL UNIQUE,
    id_User int NOT NULL ,
    id_chef int NOT NULL ,
    FOREIGN KEY (id_chef) REFERENCES chef(id_chef)
    ON DELETE CASCADE,
    FOREIGN KEY (id_Menu) REFERENCES Menus(id_Menu)
    ON DELETE CASCADE,
    FOREIGN KEY (id_User) REFERENCES inscription(id_User)
    ON DELETE CASCADE

);