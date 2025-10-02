<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API для управления задачами</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; padding: 20px; }
        h1, h2 { color: #333; }
        code { background-color: #f4f4f4; padding: 2px 6px; border-radius: 4px; }
        ul { list-style-type: none; padding-left: 0; }
        li { margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1>API для управления задачами</h1>

    <h2>Tasks API (/api/tasks)</h2>
    <ul>
        <li><strong>Создание задачи:</strong> <code>POST /api/tasks</code> (поля: <code>title</code>, <code>description</code>, <code>status</code>)</li>
        <li><strong>Просмотр списка задач:</strong> <code>GET /api/tasks</code> (возвращает все задачи)</li>
        <li><strong>Просмотр одной задачи:</strong> <code>GET /api/tasks/{id}</code></li>
        <li><strong>Обновление задачи:</strong> <code>PUT /api/tasks/{id}</code></li>
        <li><strong>Удаление задачи:</strong> <code>DELETE /api/tasks/{id}</code></li>
    </ul>
</body>
</html>
