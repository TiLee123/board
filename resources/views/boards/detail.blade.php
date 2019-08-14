

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<script src="/scripts/jquery-1.9.1.min.js"></script>
<script src="/scripts/jquery.mobile-1.3.2.min.js"></script>
<link rel="stylesheet" href="/scripts/jquery.mobile-1.3.2.min.css" />
<link rel="stylesheet" href="/styles.css" />
</head>
<body>
    <div class="action-list"></div>
    <div data-role="page" data-add-back-btn="true" data-theme="c">
        <div data-role="header">
            <h1>公告內容</h1>
        </div>
        <div data-role="content">
            <img src="/images/{{ $board->boardName }}.jpg" class="employee-pic" width="100"  onerror="this.src='/images/null.jpg'" />
            <div class="employee-details">
                <h3>{{ $board->itemName }}</h3>
                <p>公告人員:{{ $board->boardName }}</p>
                <p>公告時間:{{ $board->updateTime }}</p>
            </div>

            <ul data-role="listview" data-inset="true" class="action-list">
                <li><h4>公告內容</h4><p>{{ $board->content }}</p></li>
            </ul>
        </div>
    </div>
</body>
</html>