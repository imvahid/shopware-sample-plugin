# Task Scheduled Run

doc: [link](https://developer.shopware.com/docs/guides/plugins/plugins/plugin-fundamentals/add-scheduled-task.html)



## Debug
debugging your owne task by runnig blew command in terminal:
```bash
$ bin/console  scheduled-task:run-single
```

## Execute
run this command in terminal or by a task runner ([Supervisord](https://supervisord.org/))
```bash
$ /path/to/your-shop/bin/console  scheduled-task:run
```

## Other 
|  Command | Description|
|----------|------------|
|  scheduled-task:list        |List all scheduled tasks|
|  scheduled-task:register    |Registers all scheduled tasks|
|  scheduled-task:run         |Runs scheduled tasks|
|  scheduled-task:run-single  |Allows to run one single scheduled task regardless of its schedule.|
