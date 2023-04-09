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
    * 4.1 [System Feature 1](#41-system-feature-1)
    * 4.2 [System Feature 2 (and so on)](#42-system-feature-2-and-so-on)
  * [Other Nonfunctional Requirements](#other-nonfunctional-requirements)
    * 5.1 [Performance Requirements](#51-performance-requirements)
    * 5.2 [Safety Requirements](#52-safety-requirements)
    * 5.3 [Security Requirements](#53-security-requirements)
    * 5.4 [Software Quality Attributes](#54-software-quality-attributes)
    * 5.5 [Business Rules](#55-business-rules)
  * [Other Requirements](#other-requirements)
* [Appendix A: Glossary](#appendix-a-glossary)
* [Appendix B: Analysis Models](#appendix-b-analysis-models)
* [Appendix C: To Be Determined List](#appendix-c-to-be-determined-list)





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
This template illustrates organizing the functional requirements for the product by system features, the major services provided by the product. You may prefer to organize this section by use case, mode of operation, user class, object class, functional hierarchy, or combinations of these, whatever makes the most logical sense for your product.

### 4.1 System Feature 1
Don’t really say “System Feature 1.” State the feature name in just a few words.
4.1.1   Description and Priority
 Provide a short description of the feature and indicate whether it is of High, Medium, or Low priority. You could also include specific priority component ratings, such as benefit, penalty, cost, and risk (each rated on a relative scale from a low of 1 to a high of 9).
4.1.2   Stimulus/Response Sequences
 List the sequences of user actions and system responses that stimulate the behavior defined for this feature. These will correspond to the dialog elements associated with use cases.
4.1.3   Functional Requirements
 Itemize the detailed functional requirements associated with this feature. These are the software capabilities that must be present in order for the user to carry out the services provided by the feature, or to execute the use case. Include how the product should respond to anticipated error conditions or invalid inputs. Requirements should be concise, complete, unambiguous, verifiable, and necessary. Use “TBD” as a placeholder to indicate when necessary information is not yet available.
 
 Each requirement should be uniquely identified with a sequence number or a meaningful tag of some kind.

### 4.2 System Feature 2 (and so on)

## Other Nonfunctional Requirements
### 5.1 Performance Requirements
If there are performance requirements for the product under various circumstances, state them here and explain their rationale, to help the developers understand the intent and make suitable design choices. Specify the timing relationships for real time systems. Make such requirements as specific as possible. You may need to state performance requirements for individual functional requirements or features.
### 5.2 Safety Requirements
Specify those requirements that are concerned with possible loss, damage, or harm that could result from the use of the product. Define any safeguards or actions that must be taken, as well as actions that must be prevented. Refer to any external policies or regulations that state safety issues that affect the product’s design or use. Define any safety certifications that must be satisfied.
### 5.3 Security Requirements
Specify any requirements regarding security or privacy issues surrounding use of the product or protection of the data used or created by the product. Define any user identity authentication requirements. Refer to any external policies or regulations containing security issues that affect the product. Define any security or privacy certifications that must be satisfied.
### 5.4 Software Quality Attributes
Specify any additional quality characteristics for the product that will be important to either the customers or the developers. Some to consider are: adaptability, availability, correctness, flexibility, interoperability, maintainability, portability, reliability, reusability, robustness, testability, and usability. Write these to be specific, quantitative, and verifiable when possible. At the least, clarify the relative preferences for various attributes, such as ease of use over ease of learning.
### 5.5 Business Rules
List any operating principles about the product, such as which individuals or roles can perform which functions under specific circumstances. These are not functional requirements in themselves, but they may imply certain functional requirements to enforce the rules.

## Other Requirements
Define any other requirements not covered elsewhere in the SRS. This might include database requirements, internationalization requirements, legal requirements, reuse objectives for the project, and so on. Add any new sections that are pertinent to the project.
### Appendix A: Glossary
Define all the terms necessary to properly interpret the SRS, including acronyms and abbreviations. You may wish to build a separate glossary that spans multiple projects or the entire organization, and just include terms specific to a single project in each SRS.
### Appendix B: Analysis Models
Optionally, include any pertinent analysis models, such as data flow diagrams, class diagrams, state-transition diagrams, or entity-relationship diagrams.
### Appendix C: To Be Determined List
Collect a numbered list of the TBD (to be determined) references that remain in the SRS so they can be tracked to closure.
