# Manners Matter
made by: Mitrofan Alexandru, Ciocan Alexandru

Table of Contents
=================
  * [Introduction](#1-introduction)
    * 1.1 [Purpose](#11-purpose)
    * 1.2 [Intended Audience and Reading Suggestions](#12-intended-audience-and-reading-suggestions)
    * 1.3 [Product Scope](#13-product-scope)
    * 1.4 [References](#14-references)
  * [Overall Description](#overall-description)
    * 2.1 [Product Perspective](#21-product-perspective)
    * 2.2 [Product Functions](#22-product-functions)
    * 2.3 [User Classes and Characteristics](#23-user-classes-and-characteristics)
  * [External Interface Requirements](#external-interface-requirements)
    * 3.1 [User Interfaces](#31-user-interfaces)
    * 3.2 [Software Interfaces](#32-software-interfaces)
    * 3.3 [Communications Interfaces](#33-communications-interfaces)
  * [System Features](#system-features)
    * 4.1 [Register, login and logout](#41-system-feature-1)
    * 4.2 [System Feature 2 (and so on)](#42-system-feature-2-and-so-on)
 




## 1. Introduction
### 1.1 Purpose 
This document describes the website named Manners Matter. The purpose of the documentation is to present the way the application runs, the architecture of the application and its characteristics.

### 1.2 Intended Audience and Reading Suggestions
The audience is anyone who wants to use the application. Next, the documentation presents the way the application works, software specifications and its architecture. 
Section 2 covers aspects related to the mode of operation and is suitable for regular users. The other sections cover advanced aspects and are intended for developers.

### 1.3 Product Scope
The role of this web application is to provide users with information about manners in the online environment, to offer them personalized advice based on their needs and to test their knowledge gained from reading the informative materials provided.
The application has a section with the ranking of the best users, its purpose being to motivate them to put into practice the information learned through the tests in the related section.

### 1.4 References
List any other documents or Web addresses to which this SRS refers. These may include user interface style guides, contracts, standards, system requirements specifications, use case documents, or a vision and scope document. Provide enough information so that the reader could access a copy of each reference, including title, author, version number, date, and source or location.

## Overall Description
### 2.1 Product Perspective

The application is self-contained. It has two components: the administrative one and the component intended for users.


### 2.2 Product Functions

Functions of the user component that a user can perform: <br />
-register and login; <br />
-edit profile; <br />
-acces articles; <br />
-get personalized advices; <br />
-sustain tests; <br />
-see a scoreboard; <br />
-give feedback to admins. <br />
 <br />
Functions that an admin can perform on administrative module: <br />
-add new articles; <br />
-receive feedback/questions from users; <br />
-add new advices; <br />
-add new questions for tests. <br />


### 2.3 User Classes and Characteristics
Types of users:<br />
-users without an account can acces informations, get personalized advices, sustain test. They can't have a profile and can't get points for their tests.<br />
-users with an account can additionaly view their profile, keep track of their score and rank and appear on the leaderboard;<br />
-admins can add new articles, new advices, new questions for tests and receive feedback from users.<br />
<br />

Usual users are those who want to find more about manners on the internet. They can use this app as long as admins add new articles to read, new advices and new questions for tests in order to keep users engaged.<br />
The most important users are those who create an account.

 
## External Interface Requirements
### 3.1 User Interfaces

The home page (index.html) is the page that contains previews of all articles.<br />
The menu lights up depending on the page the user is on to facilitate page navigation.<br />
In the header, if the user hovers over the profile picture, a menu with 2 links opens, one that leads to his profile and the other that is a logout button.<br />
On the Home page, each article title is a link that leads to a separate html page with the entire article.<br />
The Profile.html page presents an "Edit" button that allows the user to edit his data, when pressed, text input fields will appear and a "Save" button will appear to save the changes.<br />
On the Advice.html page there is a form with radio buttons and a submit button. When the user chooses his preferred features from the form the list of tips will be filtered according to his choices.<br />
The Challenge.html page has a form where you select the difficulty of the test, and the submit button opens a new page with a question. The user ticks the correct answer and then clicks next question to display the next question until the test is ready and is redirected to the Home page.<br />
The Rank.html page shows a podium with the first 3 users and a table with more users.<br />
The About.html page presents information about the website.<br />
The Contact.html page contains a text input to allow users to provide input and an input field for email. The message is sent after pressing the submit button.

 

### 3.2 Software Interfaces


This website is connected to a database that stores user data, but also data present on the site such as articles, advices, questions, etc.

### 3.3 Communications Interfaces

Communication occurs only between users and administrators. The user communicates with the administrator through the Contact.html page. The administrator sees the message in the administration module on a page specific to viewing messages. The user receives a reply by email.

## System Features
In this section each feature has specific priority component ratings, such as benefit, penalty, cost, and risk (each rated on a relative scale from a low of 1 to a high of 9).
### 4.1 Register, login and logout

### 4.1.1   Description and Priority

This is an account management feature and has a medium priority because the website can be used without having an account. The benefit is that users can keep track of the accumulated score and appear in the ranking. The cost is the need for a database to store user data.<br />
<br />
priority -> medium<br />
benefit  -> 8<br />
cost     -> 4<br />
risk     -> 3<br />

  
### 4.1.2   Stimulus/Response Sequences
-User press on login link.<br />
-If he does not have an account, he will press the register button.<br />
-Here you will enter your username, name, password, password x2.<br />
-After submitting, he will be redirected to Home.<br />
<br />

-The login page has the username and password fields.<br />
-The submit button will redirect user to Home if the data is correct, or a message will be displayed if the data is wrong.<br />
<br />
-The logout button present in the dropdown menu in the profile picture in the header will disconnect the user and redirect him to Home.

 
### 4.1.3   Functional Requirements
1. Pages Login.html and Register.html can be accessed only if the user is loged in.<br />
2. The user will be loged in only if the username and password are correct.<br />
3. The button "Logout" will logout the user only if the user is logged in, otherwise it will do nothing. <br />
4. If the user tries to acces pages Login.html and Register.hmtl via URL while logged in, he will be redirected to Home.html.<br />
 


### 4.2 System Feature 2 (and so on)

 
  
