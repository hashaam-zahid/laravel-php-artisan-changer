
```markdown
# Laravel Artisan Command Changer

This Laravel application allows users to generate a `.bat` file to customize Artisan commands.

## Description

This project demonstrates how to create a Laravel controller method that generates a `.bat` file based on user input and allows users to download it. The `.bat` file includes doskey commands to modify Artisan commands within a Laravel project.

## Features

- Customize the commands as per user input
- Download the generated `.bat` file

## Installation

1. Clone the repository:

```bash
git clone [Laravel PHP Artisan Changer](https://github.com/hashaam-zahid/laravel-php-artisan-changer.git)
```


2. Start the development server:

```bash
php artisan serve
```

3. Access the application in your browser at `http://localhost:8000`.

## Folder Files Structure
```
├── Laravel/
│   ├── Controller/
│   │             ├── CommandController.php
│   ├── Routes/
│   │          ├──web.php ( paste the code )
├──  Resource/View/
                   ├──form.blade.php
                    ├──result.blade.php                  
│   ├── Storage/app/ 
│                   ├── guide.gif
│   
│
└──
```

## Usage

1. Access the application in your browser.

2. Enter the Desireable command which you want to change PHP Artisan to e.x PA 

3. Click the "Download Generated File doskey.bat" link to download the `.bat` file link.
4. Copy the Command Location 
5. And Past in CMD Property Target Field 

## Contributing

Contributions are welcome! Feel free to open issues or submit pull requests.

## License

This project is licensed under the [MIT License](LICENSE).

## Acknowledgements

- This project was created as a demonstration for learning purposes.

## Contact

For any questions or feedback, feel free to contact [Hashaam Zahid](mailto:hashaamzahid3@gmail.com).
```

Make sure to include a `LICENSE` file in the root directory of your project containing the text of the MIT License. The license text can be obtained from [opensource.org/licenses/MIT](https://opensource.org/licenses/MIT). You can create a file named `LICENSE` and paste the license text inside it.

This README template provides a basic structure along with instructions for installation, usage, contributing, and contact information while referencing the MIT License for open-source usage. Adjust the placeholders (`yourusername`, `your-repo`, `yourname`, `youremail@example.com`) with your actual details and customize it further based on your project's needs.
