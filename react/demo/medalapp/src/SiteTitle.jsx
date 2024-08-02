// ändert den Website-Title - import in der index.jsx
import { useEffect } from 'react';

function SiteTitle() {
  useEffect(() => {
    document.title = 'medalapp';
  }, []);
}
export default SiteTitle;