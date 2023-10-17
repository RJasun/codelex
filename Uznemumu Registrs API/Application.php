<?php
class Application
{
    private ApiFetcher $fetcher;
    private Menu $menu;
    private CompanyPresenter $presenter;

    public function __construct()
    {
        $this->fetcher = new ApiFetcher('https://data.gov.lv/dati/lv/api/3/action/datastore_search');
        $this->menu = new Menu();
        $this->presenter = new CompanyPresenter();
    }

    public function run(): void
    {
        while (true) {
            echo $this->menu->displayMenu();
            $choice = $this->menu->getUserChoice();

            switch ($choice) {
                case '0':
                    echo "Goodbye!\n";
                    exit(0);

                case '1':
                    echo "Enter the company name: ";
                    $query = readline();
                    $responseData = $this->fetcher->fetchData('25e80bf3-f107-4ab4-89ef-251b5b9374e9', $query);
                    break;

                case '2':
                    echo "Enter the company registration code: ";
                    $query = readline();
                    $responseData = $this->fetcher->fetchData('25e80bf3-f107-4ab4-89ef-251b5b9374e9', "regcode:" . $query);
                    break;

                default:
                    echo "Invalid choice! Try again.\n";
                    break;
            }

            $companies = $responseData['result']['records'] ?? [];
            echo $this->presenter->getFormattedCompanies($companies);
        }
    }
}
