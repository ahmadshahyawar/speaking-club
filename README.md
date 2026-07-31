# Speaking Club

A two-page tool for running a speaking club: an **admin panel** to manage vocabulary, discussion questions, and a background video, and a **display page** to project that content for the group.

## Static version (current)

`admin.html` and `display.html` are now plain static files — open them directly in a browser, no server required. Data is stored in the browser via `localStorage` (see `storage.js`), seeded from `seed-data.js` on first load.

**Note:** because the data lives in `localStorage`, the admin panel and the display page only share data when opened in the **same browser** (e.g. two tabs on the same computer/projector). This matches a typical single-PC classroom setup. If you need admin and display to run on separate devices, you'll need a shared backend — see below.

To use:
1. Open `admin.html`, edit vocabulary/questions/video, click **Save to Display**.
2. Open `display.html` (or click **Open Display Page**) in another tab of the same browser.

## Legacy Python server (optional)

`server.py` is the original backend version, kept for reference. It serves the same admin/display pages over HTTP and stores data in `speaking_data.json` / `lessons.json` on disk instead of `localStorage`, which lets admin and display run on separate devices. Run it with:

```bash
python server.py
```

Then visit `http://localhost:8000/` (admin) and `http://localhost:8000/display`.
