<template>
  <v-container>
    <v-layout text-center wrap>
      <v-flex mb-10 xs12>
        <h1 class="display-2 mb-3">
          COMP 3613 - Software Engineering II
        </h1>
      </v-flex>
    </v-layout>
    <v-layout>
      <v-flex>
        <h2 class="display-1">Headcounter Project Overview</h2>
        <hr />
        <p class="body-1">
          The Attendance Tracker, given name as &#39;HeadCounter&#39;, basically
          works by using a Raspberry Pi to allow scanning of Student ID Card
          which has a built in RFID chip in it to log attendance. We chose this
          because we saw the need for it at UWI’s Computer Labs and classes,
          where upon entry you would need to manually sign a register.
          Developing such an application would eliminate inefficiencies in
          attendance recording.
        </p>
        <br />
        <hr />
        <h2 class="title">Problem Statement</h2>
        <p class="body-1">
          At classes, students manually sign an attendance sheet when they enter
          a classroom. They are required to manually write their name and
          student ID. The current manual procedure is very inefficient due to
          the possibility of there being a line backup that might disrupt the
          students that are in a class.
        </p>
        <hr />
        <h2 class="title">Proposed Solution</h2>
        <p class="body-1">
          A system must be developed comprising of the Raspberry Pi and RFID
          components to allow automated logging of attendance with the use of
          student ID cards. This system would also provide a way of viewing the
          attendance records for a particular class.
        </p>
        <h2 class="display-1">Requirements</h2>
        <hr />
        <h2 class="title">User Requirements</h2>
        <ul class="body-1">
          <li>
            -The student should be able to scan their student ID card to record
            attendance in any class.
          </li>
          <li>
            - Lecturers/ Tutors should be able to start and stop the scanning
            ability for a class at any time.
          </li>
          <li>
            - Lectures should be able to create classes, which include all
            students who are enrolled in that class.
          </li>
          <li>
            - Lecturers should be able to view the attendance records for their
            classes.
          </li>
          <li>
            - Lectures should be able to view missing students from specified
            class attendance record.
          </li>
        </ul>
        <hr />
        <h2 class="title">Functional Requirements</h2>
        <p class="body-1"></p>
        <hr />
        <h2 class="title">Non-Functional Requirements</h2>
        <p class="body-1"></p>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
export default {
  name: "COMP3613"
};
</script>

<style scoped></style>
