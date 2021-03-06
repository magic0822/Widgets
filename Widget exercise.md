Please develop a web application with a single form that allows users to order widgets. The web application should contain a 
form that collects the following pieces of data:

- The quantity of widgets (must be an integer - we can't ship partial widgets)
- The color the widgets should be painted (red, blue or yellow)
- The date by which the widgets are needed (which must be at least 1 week from the date the user is filling out the form)
- The type of widget the customer wants (Options are: "Widget", "Widget Pro" and "Widget Xtreme")

When the user submits the form, if the values in all of the fields are valid, your application should:

- Store the details of the order in a database
- Display a confirmation message that shows the user the details of the order they placed along with a unique order ID

The marketing department will get their design team to work on the UI once you're done, so don't worry about styling your
application, but do try to keep the UI code clean enough that our designers can style it without too much trouble.

Please use whatever language and database you're most comfortable working with. We want to see what you can do with the
tools you know best, so please use those tools. It's up to you whether you use a framework or not. Please include a script
to initialize the database and create whatever database objects your application needs so the sysadmins can get it up and
running.

Conditions of Acceptance:

- Verify that the application has a form that displays the following fields:
    - Quantity
    - Color
    - Date needed by
    - Widget type
- Verify that all of the fields on the form must have values for the submission to pass validation.
- Verify that, when a user submits the form, the form data is persisted.
- Verify that the form validates the intended data types
- Verify that a confirmation message is displayed upon successful form submission
- Verify that the confirmation message includes a unique order ID
- Verify that the options presented are constrained appropriately

Please turn in to us the following:

- Your application code
- Whatever DDL or migration scripts we need to create the database for your application
- Any test suite you may have written for the application
- Any third-party libraries, packages, gems, etc. that are required to run your application

Please compress your deliverables into one zip file whose name includes your last name and follows the 
format "#{last_name}_widgets.zip" and upload this file to https://www.med.upenn.edu/apps/pennbox.


If you've built a rock solid widget order form and want to stop there, feel free - we won't hold it against you. 
If you do want a chance to show off a little we've got a couple of extra credit features we would love to see you add. 
Proceed with caution - it is *much* more important to us that the core of your widget submission be solid than it is that 
you add on the next couple of fancy bells and whistles.

EXTRA CREDIT #1 - Email confirmation

- Verify that users can enter their email address on the order form
- Verify that, if the order is placed successfully, an email is sent to the address submitted that includes the ID of the 
new order

EXTRA CREDIT #2 - Order tracking

- Verify that there is an order details page for the new order
- Verify that the order details page shows the current status of the order
- Verify that it is possible for an administrator to update the status of the order
- If you did EXTRA CREDIT #1, verify that the email confirmation message includes a link to the details of the order