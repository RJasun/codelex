<?php
class CompanyPresenter
{
    public function getFormattedCompanies(array $companies): string
    {
        $formatted = '';

        if (empty($companies)) {
            $formatted .= "No company found with the provided search term!\n";
        } else {
            foreach ($companies as $company) {
                $formatted .= $this->getFormattedCompany($company);
            }
        }

        return $formatted;
    }

    private function getFormattedCompany(array $company): string
    {
        $formatted = "Company Name: " . ($company['name'] ?? 'N/A') . "\n";
        $formatted .= "Registration Code: " . ($company['regcode'] ?? 'N/A') . "\n";
        $formatted .= "Address: " . ($company['address'] ?? 'N/A') . "\n";
        $formatted .= "Type: " . ($company['type'] ?? 'N/A') . "\n";
        $formatted .= "Registered Date: " . ($company['registered'] ?? 'N/A') . "\n";
        if (isset($company['terminated'])) {
            $formatted .= "Termination Date: " . $company['terminated'] . "\n";
        }
        $formatted .= "---------------------------------\n";

        return $formatted;
    }
}