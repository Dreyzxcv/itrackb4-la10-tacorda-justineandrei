**Q1: Explain the order you placed your featured route and your detail route in, and what would happen if you swapped them.**
- I put the featured route before the {id} route because Laravel checks routes from top to bottom and stops at the first one that matches. If I put {id} first, Laravel would see "featured" in the URL and think it's an id, so it would never reach the featured route at all. By putting featured first, Laravel finds it before even looking at the {id} route.

**Q2: What happens when someone visits an id that does not exist in your data, and what did you write to make that happen?**
- If someone types an id that doesn't exist like /barangay/999, they'll see a clean 404 page. I used isset() to check first if that id exists in my array, and if it doesn't, I call abort(404) which stops everything and shows the not found page. Without that check, it would just crash and show a PHP error with my file paths on screen.

**Q3: Why do your links use route names instead of typed URLs? Give one concrete thing that would break if they did not.**
- I used route names so that if I ever change the URL in my routes file, all the links in my views automatically update too. For example if I changed /barangay to /barangays, the back link in my detail page would break if I typed the URL directly. But since I used route('barangay.index'), it just works without touching the views.
