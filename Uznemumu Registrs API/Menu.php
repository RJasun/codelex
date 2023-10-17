<?php
class Menu
{
    public function displayMenu(): string
    {
        return "----- Main Menu -----\n"
            . "1 - Search for the company by name\n"
            . "2 - Search for the company by registration code\n"
            . "0 - Exit\n"
            . "----------------------\n"
            . "Enter your choice: ";
    }

    public function getUserChoice(): string
    {
        return readline();
    }
}
