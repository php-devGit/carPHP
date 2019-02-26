CREATE TABLE NEWS(
    id INT NOT NULL AUTO_INCREMENT,
    info VARCHAR(900) NOT NULL,
    idImage int,
    PRIMARY KEY(id),
    FOREIGN KEY(idImage) REFERENCES PICTURE(id)
);

CREATE TABLE DISCOUNTS(
    id INT NOT NULL AUTO_INCREMENT,
    idCar int,
    active int,
    discount int,
    PRIMARY KEY(id),
    FOREIGN KEY(idCar) REFERENCES CAR(id)
);