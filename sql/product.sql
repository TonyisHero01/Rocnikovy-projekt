create table Product
(
    ID NUMBER not null
        primary key 
        AUTO_INCREMENT,
    NAME VARCHAR(50) not null,
    KATEGORY VARCHAR(50), 
    DESCRIPTION VARCHAR(100),
    NUMBER_IN_STOCK NUMBER not null,
    IMAGE_URL VARCHAR(50),
    ADD_TIME TIMESTAMP not null,
    Width NUMBER,
    Height NUMBER,
    LENGTH NUMBER,
    Weight NUMBER,
    MATERIAL VARCHAR(50),
    COLOR VARCHAR(50),
    PRICE NUMBER,
)