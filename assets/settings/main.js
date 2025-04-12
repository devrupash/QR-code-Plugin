import { createRoot } from 'react-dom/client';
// import react hash router
import { createHashRouter, RouterProvider } from 'react-router-dom';
import App from './component/App';
import PostView from './component/PostView';
import QRCode from './component/QRCode';
const router = createHashRouter([
	{
		path: "/",
		element: <App />,
		children: [
			{
				path: "",
				element: <PostView />,
			},
			{
				path: "qr-code",
				element: <QRCode />,
			},
		],
	},
])
const root = createRoot(document.getElementById('academy-settings-app'));
root.render(<RouterProvider router={router} />);