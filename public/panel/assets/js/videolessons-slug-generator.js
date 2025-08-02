/**
 * Automatic Slug Generator for VideoLessons Module
 * Supports Latin and non-Latin characters
 */

// Character mapping for different languages
const characterMap = {
    // Azerbaijani characters
    'ə': 'e', 'Ə': 'E',
    'ç': 'c', 'Ç': 'C',
    'ğ': 'g', 'Ğ': 'G',
    'ı': 'i', 'I': 'I',
    'ö': 'o', 'Ö': 'O',
    'ş': 's', 'Ş': 'S',
    'ü': 'u', 'Ü': 'U',
    
    // Russian characters
    'а': 'a', 'А': 'A',
    'б': 'b', 'Б': 'B',
    'в': 'v', 'В': 'V',
    'г': 'g', 'Г': 'G',
    'д': 'd', 'Д': 'D',
    'е': 'e', 'Е': 'E',
    'ё': 'yo', 'Ё': 'Yo',
    'ж': 'zh', 'Ж': 'Zh',
    'з': 'z', 'З': 'Z',
    'и': 'i', 'И': 'I',
    'й': 'y', 'Й': 'Y',
    'к': 'k', 'К': 'K',
    'л': 'l', 'Л': 'L',
    'м': 'm', 'М': 'M',
    'н': 'n', 'Н': 'N',
    'о': 'o', 'О': 'O',
    'п': 'p', 'П': 'P',
    'р': 'r', 'Р': 'R',
    'с': 's', 'С': 'S',
    'т': 't', 'Т': 'T',
    'у': 'u', 'У': 'U',
    'ф': 'f', 'Ф': 'F',
    'х': 'h', 'Х': 'H',
    'ц': 'ts', 'Ц': 'Ts',
    'ч': 'ch', 'Ч': 'Ch',
    'ш': 'sh', 'Ш': 'Sh',
    'щ': 'sch', 'Щ': 'Sch',
    'ъ': '', 'Ъ': '',
    'ы': 'y', 'Ы': 'Y',
    'ь': '', 'Ь': '',
    'э': 'e', 'Э': 'E',
    'ю': 'yu', 'Ю': 'Yu',
    'я': 'ya', 'Я': 'Ya',
    
    // Turkish characters
    'ç': 'c', 'Ç': 'C',
    'ğ': 'g', 'Ğ': 'G',
    'ı': 'i', 'I': 'I',
    'ö': 'o', 'Ö': 'O',
    'ş': 's', 'Ş': 'S',
    'ü': 'u', 'Ü': 'U',
    
    // German characters
    'ä': 'ae', 'Ä': 'Ae',
    'ö': 'oe', 'Ö': 'Oe',
    'ü': 'ue', 'Ü': 'Ue',
    'ß': 'ss',
    
    // French characters
    'à': 'a', 'À': 'A',
    'â': 'a', 'Â': 'A',
    'ç': 'c', 'Ç': 'C',
    'é': 'e', 'É': 'E',
    'è': 'e', 'È': 'E',
    'ê': 'e', 'Ê': 'E',
    'ë': 'e', 'Ë': 'E',
    'î': 'i', 'Î': 'I',
    'ï': 'i', 'Ï': 'I',
    'ô': 'o', 'Ô': 'O',
    'ù': 'u', 'Ù': 'U',
    'û': 'u', 'Û': 'U',
    'ü': 'u', 'Ü': 'U',
    'ÿ': 'y', 'Ÿ': 'Y',
    
    // Spanish characters
    'á': 'a', 'Á': 'A',
    'é': 'e', 'É': 'E',
    'í': 'i', 'Í': 'I',
    'ñ': 'n', 'Ñ': 'N',
    'ó': 'o', 'Ó': 'O',
    'ú': 'u', 'Ú': 'U',
    'ü': 'u', 'Ü': 'U',
    
    // Portuguese characters
    'ã': 'a', 'Ã': 'A',
    'õ': 'o', 'Õ': 'O',
    
    // Polish characters
    'ą': 'a', 'Ą': 'A',
    'ć': 'c', 'Ć': 'C',
    'ę': 'e', 'Ę': 'E',
    'ł': 'l', 'Ł': 'L',
    'ń': 'n', 'Ń': 'N',
    'ó': 'o', 'Ó': 'O',
    'ś': 's', 'Ś': 'S',
    'ź': 'z', 'Ź': 'Z',
    'ż': 'z', 'Ż': 'Z',
    
    // Czech characters
    'á': 'a', 'Á': 'A',
    'č': 'c', 'Č': 'C',
    'ď': 'd', 'Ď': 'D',
    'é': 'e', 'É': 'E',
    'ě': 'e', 'Ě': 'E',
    'í': 'i', 'Í': 'I',
    'ň': 'n', 'Ň': 'N',
    'ó': 'o', 'Ó': 'O',
    'ř': 'r', 'Ř': 'R',
    'š': 's', 'Š': 'S',
    'ť': 't', 'Ť': 'T',
    'ú': 'u', 'Ú': 'U',
    'ů': 'u', 'Ů': 'U',
    'ý': 'y', 'Ý': 'Y',
    'ž': 'z', 'Ž': 'Z',
    
    // Hungarian characters
    'á': 'a', 'Á': 'A',
    'é': 'e', 'É': 'E',
    'í': 'i', 'Í': 'I',
    'ó': 'o', 'Ó': 'O',
    'ö': 'o', 'Ö': 'O',
    'ő': 'o', 'Ő': 'O',
    'ú': 'u', 'Ú': 'U',
    'ü': 'u', 'Ü': 'U',
    'ű': 'u', 'Ű': 'U',
    
    // Romanian characters
    'ă': 'a', 'Ă': 'A',
    'â': 'a', 'Â': 'A',
    'î': 'i', 'Î': 'I',
    'ș': 's', 'Ș': 'S',
    'ț': 't', 'Ț': 'T',
    
    // Special characters and symbols
    '&': 'and',
    '@': 'at',
    '#': 'hash',
    '$': 'dollar',
    '%': 'percent',
    '^': 'caret',
    '*': 'asterisk',
    '(': '',
    ')': '',
    '-': '-',
    '_': '_',
    '+': 'plus',
    '=': 'equals',
    '[': '',
    ']': '',
    '{': '',
    '}': '',
    '|': 'or',
    '\\': '',
    '/': '',
    ':': '',
    ';': '',
    '"': '',
    "'": '',
    '<': 'less',
    '>': 'greater',
    ',': '',
    '.': '',
    '?': '',
    '!': '',
    '~': 'tilde',
    '`': '',
    '°': 'degrees',
    '©': 'copyright',
    '®': 'registered',
    '™': 'trademark',
    '€': 'euro',
    '£': 'pound',
    '¥': 'yen',
    '¢': 'cent',
    '§': 'section',
    '¶': 'paragraph',
    '†': 'dagger',
    '‡': 'double-dagger',
    '•': 'bullet',
    '–': '-',
    '—': '-',
    '…': 'ellipsis',
    '‹': '',
    '›': '',
    '«': '',
    '»': '',
    '‽': 'interrobang',
    '¡': '',
    '¿': '',
    '±': 'plus-minus',
    '×': 'times',
    '÷': 'divided',
    '≠': 'not-equal',
    '≤': 'less-equal',
    '≥': 'greater-equal',
    '≈': 'approximately',
    '∞': 'infinity',
    '∑': 'sum',
    '∏': 'product',
    '√': 'square-root',
    '∫': 'integral',
    '∆': 'delta',
    '∇': 'nabla',
    '∈': 'element-of',
    '∉': 'not-element-of',
    '∋': 'contains',
    '∌': 'not-contains',
    '∩': 'intersection',
    '∪': 'union',
    '⊂': 'subset',
    '⊃': 'superset',
    '⊆': 'subset-equal',
    '⊇': 'superset-equal',
    '⊕': 'direct-sum',
    '⊗': 'tensor-product',
    '⊥': 'perpendicular',
    '∠': 'angle',
    '∡': 'measured-angle',
    '∢': 'spherical-angle',
    '∟': 'right-angle',
    '⊾': 'measured-right-angle'
};

/**
 * Convert text to URL-friendly slug
 * @param {string} text - Input text
 * @returns {string} - URL-friendly slug
 */
function generateSlug(text) {
    if (!text) return '';

    let slug = text.toString();

    // Convert to lowercase
    slug = slug.toLowerCase();

    // Replace special characters with their Latin equivalents
    for (const [char, replacement] of Object.entries(characterMap)) {
        slug = slug.replace(new RegExp(escapeRegExp(char), 'g'), replacement);
    }

    // Remove any remaining non-alphanumeric characters except hyphens and underscores
    slug = slug.replace(/[^a-z0-9\-_]/g, '-');

    // Replace multiple consecutive hyphens with a single hyphen
    slug = slug.replace(/-+/g, '-');

    // Remove leading and trailing hyphens
    slug = slug.replace(/^-+|-+$/g, '');

    // Limit length to 60 characters
    if (slug.length > 60) {
        slug = slug.substring(0, 60);
        // Remove trailing hyphen if it exists
        slug = slug.replace(/-+$/, '');
    }

    return slug;
}

/**
 * Escape special regex characters
 * @param {string} string - String to escape
 * @returns {string} - Escaped string
 */
function escapeRegExp(string) {
    return string.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
}

/**
 * Show notification message
 * @param {string} message - Message to show
 * @param {string} type - Type of notification (success, error, warning)
 */
function showNotification(message, type = 'info') {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg max-w-sm ${
        type === 'success' ? 'bg-green-500 text-white' :
        type === 'error' ? 'bg-red-500 text-white' :
        type === 'warning' ? 'bg-yellow-500 text-black' :
        'bg-blue-500 text-white'
    }`;
    notification.innerHTML = `
        <div class="flex items-center">
            <span class="mr-2">
                ${type === 'success' ? '✓' : type === 'error' ? '✗' : type === 'warning' ? '⚠' : 'ℹ'}
            </span>
            <span>${message}</span>
        </div>
    `;

    // Add to page
    document.body.appendChild(notification);

    // Remove after 3 seconds
    setTimeout(() => {
        if (notification.parentNode) {
            notification.parentNode.removeChild(notification);
        }
    }, 3000);
}

/**
 * Initialize automatic slug generation for videolessons forms
 */
function initVideoLessonsSlugGeneration() {
    // Wait for DOM to be ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', setupSlugGeneration);
    } else {
        setupSlugGeneration();
    }
}

/**
 * Setup slug generation for all language tabs
 */
function setupSlugGeneration() {
    // Find all title inputs across language tabs
    const titleInputs = document.querySelectorAll('input[name^="title["]');
    const slugInputs = document.querySelectorAll('input[name^="slug["]');

    // Create a map of title inputs to their corresponding slug inputs
    const titleToSlugMap = new Map();

    titleInputs.forEach((titleInput, index) => {
        const titleName = titleInput.getAttribute('name');
        const languageCode = titleName.match(/\[([^\]]+)\]/)[1];
        const slugInput = document.querySelector(`input[name="slug[${languageCode}]"]`);
        
        if (slugInput) {
            titleToSlugMap.set(titleInput, slugInput);
            
            // Add event listeners for real-time slug generation
            titleInput.addEventListener('input', (e) => {
                const slug = generateSlug(e.target.value);
                slugInput.value = slug;
            });

            titleInput.addEventListener('blur', (e) => {
                if (!slugInput.value) {
                    const slug = generateSlug(e.target.value);
                    slugInput.value = slug;
                }
            });

            // Add event listener for slug input to allow manual editing
            slugInput.addEventListener('input', (e) => {
                // Allow manual editing but still clean the input
                const cleanedSlug = generateSlug(e.target.value);
                if (cleanedSlug !== e.target.value) {
                    e.target.value = cleanedSlug;
                }
            });
        }
    });

    // Add a global button to regenerate all slugs
    addRegenerateSlugsButton(titleToSlugMap);
}

/**
 * Add a button to regenerate all slugs from titles
 * @param {Map} titleToSlugMap - Map of title inputs to slug inputs
 */
function addRegenerateSlugsButton(titleToSlugMap) {
    // Find the form
    const form = document.querySelector('form[action*="videolessons"]');
    if (!form) return;

    // Create regenerate button
    const regenerateButton = document.createElement('button');
    regenerateButton.type = 'button';
    regenerateButton.className = 'btn bg-blue-500 text-white border-blue-500 hover:bg-blue-600 hover:border-blue-600 focus:bg-blue-600 focus:border-blue-600 focus:ring focus:ring-blue-100 active:bg-blue-600 active:border-blue-600 active:ring active:ring-blue-100 dark:ring-blue-400/20 mr-2';
    regenerateButton.innerHTML = '<i class="fas fa-magic mr-1"></i>Slug-ları yenidən yarat';
    regenerateButton.style.marginBottom = '10px';

    // Add click event
    regenerateButton.addEventListener('click', () => {
        titleToSlugMap.forEach((slugInput, titleInput) => {
            const slug = generateSlug(titleInput.value);
            slugInput.value = slug;
        });
        
        // Show success message
        showNotification('Slug-lar uğurla yenidən yaradıldı!', 'success');
    });

    // Insert button before the submit button
    const submitButton = form.querySelector('button[type="submit"]');
    if (submitButton) {
        submitButton.parentNode.insertBefore(regenerateButton, submitButton);
    }
}

// Initialize the slug generator when the page loads
initVideoLessonsSlugGeneration(); 