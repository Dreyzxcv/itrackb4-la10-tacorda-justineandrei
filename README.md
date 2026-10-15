# Laboratory Activity 9: Your Own Table, Your Own Model

## F1: Which column did you make nullable, and why that one and not another?

I made `landmark` nullable. Not every barangay in my system has a well-known landmark, for example Cavinitan has none in my seeder, so the column has to be allowed to stay empty. The other columns like name, municipality, population and barangay captain are required for every barangay, so they should never be empty.

## F2: Which step failed first for you, and what did the error say?

The first failure was in Tinker, when I tried `App\Models\Barangay::create(['name' => 'Palnab del Norte'])` before adding `$fillable`. It threw a `MassAssignmentException` that said "Add [name] to fillable property to allow mass assignment on [App\Models\Barangay]". That told me Laravel blocks mass assignment by default, so I added all six columns (name, municipality, population, barangay_captain, is_coastal and landmark) to `$fillable` in my `Barangay` model, and the same line worked after that.

## F3: You changed no Blade file in Part D, yet your pages still work. Why not?

My Blade files read the data like `$barangay['name']` and loop over `$barangays`, and my controller still passes variables with those same names. The only thing that changed is where the data comes from: `Barangay::all()` and `Barangay::findOrFail($id)` return Eloquent objects instead of plain arrays. Eloquent models allow array-style access, so `$barangay['name']` gives the same value as before and the views did not need to change.