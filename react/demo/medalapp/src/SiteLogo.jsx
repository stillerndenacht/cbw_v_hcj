// ändert das Website-Logo - import in der index.js
import { useEffect } from "react";

function SiteLogo() {
  useEffect(() => {
    const head = document.head;
    const headlink = head.querySelector('link[rel="icon"]');
    headlink.href =
      "./logo192.png";
  }, []);
}
export default SiteLogo;
