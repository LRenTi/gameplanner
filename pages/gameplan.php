<!DOCTYPE html>
<head>
    <title>Spielplan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
</head>
  <body>
    <div class="py-4">
      <div class="dropdown">
        <button class="btn btn-gray-800 d-inline-flex align-items-center me-2 dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
            Neuer Eintrag
        </button>
        </div>
      </div>
    </div>
    <div class="col-12 mb-4">
      <div class="card border-0 shadow">
        <div class="card-body">
          <div class="m-2" id='calendar'></div>
        </div>
      </div>
  </div>
  </body>
<script src="assets/js/calendar.js"></script>
</html>