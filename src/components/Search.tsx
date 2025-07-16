function Search() {
 
    function handleSearch() {
        alert("Movie or TV show search initiated!");
    }

  return (
    <div className="flex justify-center ">
      
      <input
        type="text"
        placeholder="Search for movies or TV shows..."
        className="text-sm p-2 border border-gray-300 rounded md:w-1/2 lg:w-1/3"
      />
      <button onClick={handleSearch} className=" p-2 ml-2 rounded-full shadow hover:bg-blue-200">
        🔍
      </button>
    </div>
  );
}

export default Search;
