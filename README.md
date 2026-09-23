# Laboratory Activity 6

## Q1 — Why no new route was needed

The router only looks at the path, not the query string. So whether I visit `/barangay`, `/barangay?municipality=Virac`, or `/barangay?municipality=Virac&captain=Justine Andrei Tacorda`, they all hit the same route. I just read the filter values inside the controller using `$request->query()`, so I never needed to add a new route.

## Q2 — What the URL would look like with route parameters

If I used route parameters for both filters, the URL for "year 4 only, no course filter" would have to look something like `/barangay/all/4` — I would need to put a placeholder like `all` just to say I'm not filtering by municipality. You can't skip a route parameter, so you're forced to include something even when you don't need that filter. That's why I used query strings instead — I only include the ones I'm actually using.

## Q3 — Which one needed a change to the pattern

The detail page (D3) needed a change. I used `request()->is('barangay*')` with a wildcard so it stays marked even when I'm on `/barangay/1`. The filter case (D4) didn't need anything because the query string isn't part of the path — so `barangay*` already matches `/barangay?municipality=Virac` without me doing anything extra.

## Q4 — Why I deleted filter() but kept store() and update()

I deleted `filter()` because I already replaced it with a better version inside `index()`. Keeping it would mean I have two filter implementations in the same project, and one of them is dead. I kept `store()` and `update()` because those are still empty — they're not replaced, they're just not finished yet. They'll be filled in during the next weeks, so leaving them there makes sense.