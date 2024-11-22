// Add this to your JavaScript file or include in a script tag
document.addEventListener('DOMContentLoaded', function() {
    const filterDropdowns = document.querySelectorAll('[data-filter-type]');
    const activeFiltersContainer = document.querySelector('#active-filters');
    const searchButton = document.querySelector('#apply-filters');

    // Handle filter selection
    filterDropdowns.forEach(dropdown => {
        const filterLinks = dropdown.querySelectorAll('[data-filter-value]');
        filterLinks.forEach(link => {
            link.addEventListener('click', async (e) => {
                e.preventDefault();
                const type = dropdown.dataset.filterType;
                const value = link.dataset.filterValue;

                // Add filter via AJAX
                const response = await fetch('/vehicles/add-filter', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({ type, value })
                });

                if (response.ok) {
                    updateActiveFilters();
                }
            });
        });
    });

    // Handle filter removal
    document.addEventListener('click', async (e) => {
        if (e.target.matches('[data-remove-filter]')) {
            e.preventDefault();
            const type = e.target.dataset.filterType;

            // Remove filter via AJAX
            const response = await fetch('/vehicles/remove-filter', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ type })
            });

            if (response.ok) {
                updateActiveFilters();
            }
        }
    });

    // Apply filters when search button is clicked
    searchButton.addEventListener('click', () => {
        window.location.href = '/vehicles?apply_filters=1';
    });

    async function updateActiveFilters() {
        const response = await fetch('/vehicles/get-filters');
        const filters = await response.json();
        
        // Clear current filters
        activeFiltersContainer.innerHTML = '';
        
        // Add filter buttons
        Object.entries(filters).forEach(([type, value]) => {
            const filterButton = createFilterButton(type, value);
            activeFiltersContainer.appendChild(filterButton);
        });
    }

    function createFilterButton(type, value) {
        return `
            <button class="inline-flex items-center px-4 py-2 border-2 border-dashed text-sm font-medium 
                    rounded-full text-zinc-500 dark:text-zinc-400 bg-white dark:bg-zinc-700 
                    hover:text-zinc-800 dark:hover:text-zinc-300 focus:outline-none transition"
                    data-remove-filter data-filter-type="${type}">
                <span>${value}</span>
                <i class="fa-solid fa-circle-xmark ml-2"></i>
            </button>
        `;
    }
});