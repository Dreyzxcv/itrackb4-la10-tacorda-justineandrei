# Laboratory Activity 7

## Q1: Why POST instead of GET, and what happens on refresh?

If the form used GET, the data would be included in the URL. So when the browser refreshes the page, it repeats the same request and saves the record again, which creates duplicates. POST is different because the data is sent in the body, not the URL. After saving, we redirect the user, so refreshing just reloads the redirect destination and nothing gets saved twice.

## Q2: What stops the save when validation fails, without an if statement?

When `$request->validate()` finds that a rule failed, it automatically stops the method and throws an exception. Because of that, the code that saves the record never gets reached. Laravel then sends the user back to the form and includes the error messages so they know what to fix.

## Q3: Why does the success message not appear on every page even though it lives in the layout?

The message is stored in the session as flash data, which means Laravel automatically deletes it after it is read once. The layout checks for it on every page, but after it shows up once right after the redirect, it is already gone from the session. So on every other page, the check finds nothing and the message just does not appear.