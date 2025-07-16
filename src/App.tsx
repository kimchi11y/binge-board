import "./App.css";
import Search from "./components/Search";

function App() {
  return (
    <>
      <div className="p-4">
        <h1 className="text-center text-2xl font-bold">BingeBoard</h1>
        <p className="text-center text-sm ">
          Keep track all your favourite movies and tv shows all in one place!
        </p>
      </div>
      <Search />
    </>
  );
}

export default App;
