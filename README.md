## Тестовое задание (Junior PHP Developer) 

Задача: Разработка простого API для управления задачами 
Требуется реализовать REST API для управления списком задач (To-Do List) на PHP с использованием Laravel. 
Требования к реализации: 
1. Создать Laravel-проект (если нет опыта с Laravel, можно на чистом PHP). 
2. Реализовать API с CRUD-операциями для задач
- Создание задачи: POST /tasks (поля: title, description, status). 
- Просмотр списка задач: GET /tasks (возвращает все задачи). 
- Просмотр одной задачи: GET /tasks/{id}. 
- Обновление задачи: PUT /tasks/{id}. 
- Удаление задачи: DELETE /tasks/{id}. 
3. Валидация данных (например, title не должен быть пустым). 
4. Использовать SQLite или MySQL в качестве базы данных. 
5. Код должен быть загружен в GitHub/GitLab/Bitbucket. 

## Валидация данных

Поле title должно быть обязательным, строкой, длиной не более 64 символа
Поле description должно быть обязательным, строкой, длиной не более 255 символа
Поле status должно иметь одно из значений: created (Создана), progress (В работе), suspended (Приостановлена), completed (Выполнена),returned (Возвращена на доработку), canceled (Отменена)

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
