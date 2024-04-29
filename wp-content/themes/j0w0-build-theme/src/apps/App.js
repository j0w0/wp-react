const { useState } = wp.element;
import "./App.scss";
import { ExampleWebApp } from "./ExampleWebApp/ExampleWebApp";

const App = ({ appName, postId }) => {
  const [isClicked, setIsClicked] = useState(false);

  const handleButtonClick = (event) => {
    setIsClicked((prev) => !prev);
  };

  return (
    <div>
      <h2>This is coming from React!!!!</h2>
      <p>
        App Name: {appName} / Post ID: {postId}
      </p>
      <button className="btn btn-primary" onClick={handleButtonClick}>
        {isClicked ? "Turn off" : "Turn on"}
      </button>

      <hr />

      <p>Conditional component based on App Name below.</p>
      {appName === "example" && <ExampleWebApp />}
    </div>
  );
};

export default App;
