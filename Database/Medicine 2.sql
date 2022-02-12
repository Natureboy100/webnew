create table if not exists medicine
(
    med_id        int auto_increment,
    inputfullname VARCHAR(255) null,
    mType         VARCHAR(255) null,
    mDescription  VARCHAR(255) null,
    mPrice        VARCHAR(255) null,
    mQuantity     int(6) null,
    mUsage        VARCHAR(255) null,
    mCompany      VARCHAR(255) null,
    mDose         VARCHAR(255) null,
    constraint medicine_pk
        primary key (med_id)
);

