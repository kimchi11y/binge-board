import { useState, useEffect } from "react";

const API_KEY = import.meta.env.VITE_API_KEY;

function Search() {
  const [movie, setMovie] = useState(null);

  useEffect(() => {
    const fetchMovies = async () => {
      try {
        const response = await fetch(
          `https://api.themoviedb.org/3/search/movie?api_key=${API_KEY}&query=interstellar`
        );
        const data = await response.json();
        setMovie(data.results[0]);
      } catch (error) {
        console.error("Error fetching movies:", error);
      }
    };

    fetchMovies();
  }, []);

  function handleSearch() {
    alert("Movie or TV show search initiated!");
  }

  return (
    <>
     <div className="flex justify-center ">
      <input
        type="text"
        placeholder="Search for movies or TV shows..."
        className="text-sm p-2 border border-gray-300 rounded md:w-1/2 lg:w-1/3"
      />
      <button
        onClick={handleSearch}
        className=" p-2 ml-2 rounded-full shadow hover:bg-blue-200"
      >
        🔍
      </button>
    </div>
    <div>
      <h1>{movie.title}</h1>
    </div>
    </>
   
  );
}

export default Search;
