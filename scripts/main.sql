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
    lecturer_id integer primary key,
    name        varchar(64) not null,
    img_url     varchar(255)
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
    lecturer_id integer references lecturer (lecturer_id),
    location    varchar(32),
    start_time  timestamp,
    end_time    timestamp
);

create table attendance_log
(
    id             serial primary key,
    student_id     integer references student (student_id),
    course_id      varchar(16) references course (course_id),
    lecturer_id    integer references lecturer (lecturer_id),
    timestamp_date timestamp
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