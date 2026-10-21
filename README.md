# Laboratory Activity 10

## G1: Which column did you turn into a table, and why that one and not another?

I turned `municipality` into its own `municipalities` table. In my seeder, Virac repeats across Palnab del Norte, Palnab del Sur and Capilihan, so typing the name as a string every time risks typos like "Virac" vs "virak". The other columns (name, population, barangay_captain, landmark) are different for each barangay, so there is nothing to share, and `is_coastal` is only a yes/no flag.

## G2: What number did screenshot 6 show, and why exactly that number?

It showed `Queries: 3`. `Barangay::with('municipality')->get()` runs 1 query for the barangays and 1 query for all their municipalities at once, and `Municipality::all()` for the filter links in `BarangayController@index` is the third. Without `with('municipality')`, my 5 seeded barangays would each fire their own municipality query in the table loop, so it would be 7.

## G3: Your belongsTo method is named in the singular. What would break if you made it plural?

`Barangay::with('municipality')` in my controller and `$barangay->municipality->name` in `index.blade.php` both use the method name, so renaming it to `municipalities()` would throw a `RelationNotFoundException` on the index page. Plural is also wrong semantically, because each barangay belongs to exactly one municipality, and the plural name belongs on `Municipality::barangays()`, which is the `hasMany` side.
