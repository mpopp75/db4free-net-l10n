# Contributing to db4free.net Translations

Thank you for considering contributing to the translations of the db4free.net website! Your help in making the website accessible in more languages is greatly appreciated. Follow the steps below to contribute your translations.

## Steps to Contribute

1. **Sign Up for a GitHub Account**  
   If you don’t already have a GitHub account, please sign up for one at [https://github.com](https://github.com).

2. **Fork the Repository**  
   Fork the translation repository to your own GitHub account. This will create a copy of the repository where you can apply your changes. To fork the repository, visit:
   [https://github.com/mpopp75/db4free-net-l10n](https://github.com/mpopp75/db4free-net-l10n)

3. **Clone the Repository**  
   After forking the repository, clone it to your local machine using the following command:
   
   ```bash
   git clone git@github.com:[Your_GitHub_username]/db4free-net-l10n.git
   ```

4. **Create a New Branch**  
   We recommend creating a separate branch for your translations to keep things organized. Use the following command to create and switch to a new branch:

   ```bash
   git checkout -b mytranslations
   ```

5. **Add Your Translations**  
   If the directory for the language you want to translate to doesn’t exist yet, create it. You can copy the existing `en` directory and rename it using the ISO 639-1 language code for the language you are translating to (e.g., `es` for Spanish, `fr` for French, etc.).

   Inside the new language directory, replace the English texts with your translations. Please **do not modify the IDs** of the entries. For example, replace:

   ```json
   'h1' => 'Welcome to db4free.net'
   ```

   with:

   ```json
   'h1' => 'Bienvenido a db4free.net'
   ```

   If a text is the same in both English and the target language, you can either delete the line or leave it as is.

6. **Commit and Push Your Changes**  
   Once your translations are complete, commit the changes to your local branch and push them to your forked repository on GitHub:

   ```bash
   git add .
   git commit -m "Added translations for [language]"
   git push origin mytranslations
   ```

7. **Create a Pull Request**  
   Switch to the newly created branch on GitHub and click on "New Pull Request". Please provide a brief description of the translations you’ve added, any difficulties you faced, or anything you couldn’t complete.

8. **Submit the Pull Request**  
   Once you’ve filled in the details for the pull request, click "Create Pull Request" to submit it for review.

## Additional Information

- **Need Help?**  
   If you have any questions or need further assistance before getting started, feel free to open a ticket on GitHub or ask the maintainers for help.
  
- **Language Codes**  
   When creating a new language directory, use the ISO 639-1 language code for that language. For example:
   - `es` for Spanish
   - `fr` for French
   - `de` for German

- **Coding Standards**  
   Please ensure that you follow the same file structure and conventions used in the existing translation files.

## License

By contributing to this repository, you agree that your contributions are licensed under the repository’s license.
