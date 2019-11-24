drop table student;
drop table course;
drop table lecturer;
drop table registration_list;
drop table class;
drop table attendance_log;

create table student
(
    student_id integer primary key,
    name       varchar(64)
);

create table course
(
    course_id   varchar(16) primary key,
    name        varchar(64) not null,
    description varchar(255),
    img_url     varchar(255)
);

create table lecturer
(
    lecturer_id   integer primary key,
    name          varchar(64) not null,
    img_url       varchar(255),
    password_hash varchar(255)
);

create table registration_list
(
    id         serial primary key,
    course_id  varchar(16) references course (course_id),
    student_id integer references student (student_id)
);


create table class
(
    id          serial primary key,
    type        varchar(16),
    course_id   varchar(16) references course (course_id),
    lecturer_id integer references lecturer (lecturer_id),
    location    varchar(32),
    start_time  timestamp,
    duration    time
);

create table attendance_log
(
    id             serial primary key,
    student_id     integer references student (student_id),
    class_id       integer references class (id),
    timestamp_date timestamp
);

create table course_lecturers
(
    id          serial primary key,
    course_id   varchar(16) references course (course_id),
    lecturer_id integer references lecturer (lecturer_id)
);

SELECT *
FROM pg_catalog.pg_tables;

select *
from student;

select *
from registration_list;

select *
from course;

select *
from class;

select *
from lecturer;

select *
from attendance_log;

alter table course
    alter column description drop not null;

insert into lecturer(lecturer_id, name, password_hash)
values (80085, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918');