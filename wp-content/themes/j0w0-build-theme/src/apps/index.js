import { createRoot } from "react-dom/client";
import App from "./App";

if (document.getElementById("react-app")) {
  const appEl = document.getElementById("react-app");
  const appName = appEl?.dataset?.appName;
  const postId = appEl?.dataset?.postId;
  const root = createRoot(appEl);
  root.render(<App appName={appName} postId={postId} />);
}
