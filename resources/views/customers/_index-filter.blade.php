<form action="#" method="POST" class="flex relative">
    <select class="block w-52 rounded-l-lg flex-1 appearance-none border 
                 border-gray-300 py-1 px-4 bg-white text-gray-700 
                 placeholder-gray-400 shadow-sm text-base 
                 focus:outline-none focus:ring-2 focus:ring-blue-500 
                 focus:border-transparent" name="filter">
        <option value="all">
            All
        </option>
        <option value="new">
            New Customers
        </option>
        <option value="recently_active">
            Recently Active
        </option>
        <option value="auto">
            Auto
        </option>
        <option value="home">
            Home
        </option>
        <option value="commercial">
            Commercial
        </option>
        <option value="life">
            Life
        </option>
    </select>
    <input type="submit" 
           class="rounded-r-md inline-flex items-center px-3 border-t bg-white 
           border-r border-b  border-gray-300 text-gray-500 shadow-sm text-sm">   
    </input>
</form>
