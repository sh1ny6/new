let utmQuery = decodeURIComponent(window.location.search.substring(1)),
    utmVariables = utmQuery.split('&'),
    ParameterName,
    i;

let cookieExpireTime = new Date(Date.now() + 86400e3);

const utmParams = [
    'utm_source',
    'utm_medium',
    'utm_campaign',
    'utm_content',
    'utm_term'
];

document.addEventListener('DOMContentLoaded', function () {
    const $formDogovor = document.querySelector('#form-dogovor');
    const $callBackForm = document.querySelector('.callback-form');
    const $showModal = document.querySelector('#showModal');
    const $requestForm = document.querySelector('#requestForm');
    const $errorAlertShowButton = document.querySelector('#showError');
    const $consultationForm = document.querySelector('.consultationForm');
    const $quizModalWindow = document.querySelector('#modalQuizCallBackForm');

    const phonePattern = /_/;
    const $advantagesSection = document.querySelector('.advantages-images-container');


    if ($advantagesSection) {
        document.addEventListener("scroll", function () {
            if (isVisible($advantagesSection)) {
                $advantagesSection.classList.add('advantages-images-container__animated');
            }
        });
    }

    if ($quizModalWindow) {
        //general
        const body = document.querySelector('body');
        const $openQuizModalButton = document.querySelector('#quiz-open-button');
        const $closeBtn = $quizModalWindow.querySelector('.btn-close');
        const $quizForm = $quizModalWindow.querySelector('#quizForm');
        const $stepsArray = $quizModalWindow.querySelectorAll('.callbackQuiz_step');
        //firstStep
        const $firstStepContainer = document.querySelector('.callbackQuiz_step1');
        const $firstStepBackBtn = $firstStepContainer.querySelector('.btn-back');
        const $firstStepInputsContainer = $firstStepContainer.querySelector('.callbackQuiz_buttons')
        const $firstStepNextBtn = $firstStepContainer.querySelector('.btn-next');
        //2 step
        const $secondStepContainer = document.querySelector('.callbackQuiz_step2');
        const $secondStepBackBtn = $secondStepContainer.querySelector('.btn-back');
        const $secondStepInputsContainer = $secondStepContainer.querySelector('.callbackQuiz_buttons')
        const $secondStepNextBtn = $secondStepContainer.querySelector('.btn-next');
        // 3 step
        const $thirdStepContainer = document.querySelector('.callbackQuiz_step3');
        const $thirdStepBackBtn = $thirdStepContainer.querySelector('.btn-back');
        const $thirdStepInputsContainer = $thirdStepContainer.querySelector('.callbackQuiz_buttons')
        const $thirdStepNextBtn = $thirdStepContainer.querySelector('.btn-next');
        // final step
        const $finalStepContainer = document.querySelector('.callbackQuiz_step4');
        const $ajaxLoader = $finalStepContainer.querySelector('.ajax-loader-callbackModel');
        const $submitBtn = $finalStepContainer.querySelector('#quiz-submit');
        const $nameInput = $finalStepContainer.querySelector('#quiz-name');
        const $phoneQuizInput = $finalStepContainer.querySelector('#quiz-phone');
        const $phoneQuizInputMasked = IMask($phoneQuizInput, {
            mask: '+{375} (00) 000-00-00',
            lazy: true,  // make placeholder always visible
            placeholderChar: '_'     // defaults to '_'
        });

        const openQuizModal = function () {
            $quizModalWindow.classList.remove('d-none');
            body.classList.add('preventSroll');
        };

        const closeQuizModal = function () {
            $stepsArray.forEach(function (step) {
                step.classList.add('d-none');
                changeActiveInputState(step, false);
            });
            $firstStepContainer.classList.remove('d-none');
            $quizModalWindow.classList.add('d-none');
            body.classList.remove('preventSroll');
            $quizForm['total_sum'].value = "";
            $quizForm['current_job'].value = "";
            $quizForm['current_debt'].value = "";
        }

        const changeActiveInputState = function (parent, setActive) {
            const dataButtons = parent.querySelectorAll('button');
            for (let dataButton of dataButtons) {
                dataButton.classList.remove('callbackQuiz_button--active');
            }
            if (setActive) {
                setActive.classList.add('callbackQuiz_button--active');
            }
        }

        //general
        $closeBtn.addEventListener('click', closeQuizModal);
        $openQuizModalButton.addEventListener('click', openQuizModal);

        //firstStep
        $firstStepBackBtn.addEventListener('click', closeQuizModal);
        $firstStepNextBtn.addEventListener('click', () => {
            if ($quizForm['total_sum'].value != "") {
                $firstStepContainer.classList.add('d-none');
                $secondStepContainer.classList.remove('d-none');
            } else {
                alert('Пожалуйста, выберите один из вариантов')
            }
        });
        $firstStepInputsContainer.addEventListener('click', (e) => {
            if (e.target.dataset.buttonValue) {
                changeActiveInputState($firstStepInputsContainer, e.target);
                $quizForm['total_sum'].value = e.target.dataset.buttonValue;
                $firstStepContainer.classList.add('d-none');
                $secondStepContainer.classList.remove('d-none');
            }
        });

        //secondStep
        $secondStepBackBtn.addEventListener('click', () => {
            $firstStepContainer.classList.remove('d-none');
            $secondStepContainer.classList.add('d-none');
        });
        $secondStepNextBtn.addEventListener('click', () => {
            if ($quizForm['current_job'].value != "") {
                $secondStepContainer.classList.add('d-none');
                $thirdStepContainer.classList.remove('d-none');
            } else {
                alert('Пожалуйста, выберите один из вариантов')
            }
        });
        $secondStepInputsContainer.addEventListener('click', (e) => {
            if (e.target.dataset.buttonValue) {
                changeActiveInputState($secondStepInputsContainer, e.target);
                $quizForm['current_job'].value = e.target.dataset.buttonValue;
                $secondStepContainer.classList.add('d-none');
                $thirdStepContainer.classList.remove('d-none');
            }
        });

        //thirdStep
        $thirdStepBackBtn.addEventListener('click', () => {
            $secondStepContainer.classList.remove('d-none');
            $thirdStepContainer.classList.add('d-none');
        });
        $thirdStepNextBtn.addEventListener('click', () => {
            if ($quizForm['current_debt'].value != "") {
                $thirdStepContainer.classList.add('d-none');
                $finalStepContainer.classList.remove('d-none');
            } else {
                alert('Пожалуйста, выберите один из вариантов')
            }
        });
        $thirdStepInputsContainer.addEventListener('click', (e) => {
            if (e.target.dataset.buttonValue) {
                changeActiveInputState($thirdStepInputsContainer, e.target);
                $quizForm['current_debt'].value = e.target.dataset.buttonValue;
                $thirdStepContainer.classList.add('d-none');
                $finalStepContainer.classList.remove('d-none');
            }
        });

        //	final step
        $submitBtn.addEventListener('click', () => {
            if ($nameInput.value.length === 0) {
                addErrorForRequiredInput($nameInput);
                return;
            }
            if ($phoneQuizInput.value.length !== 19 || phonePattern.test($phoneQuizInputMasked.value)) {
                addErrorForRequiredInput($phoneQuizInput);
                return;
            }
            $submitBtn.disabled = true;
            $ajaxLoader.classList.remove('d-none');
            $quizForm['name'].value = $nameInput.value;
            $quizForm['phone'].value = $phoneQuizInput.value;
            const formData = new FormData($quizForm);
            fetch("callback-quiz.php", {
                method: "POST",
                body: formData
            })
                .then(() => {
                    closeQuizModal();
                    window.location.href = "../../gratitude-quiz.html";
                    $ajaxLoader.classList.add('d-none');
                    $nameInput.value = '';
                    $phoneQuizInput.value = '';
                })
                .catch(() => {
                    closeQuizModal();
                    $ajaxLoader.classList.add('d-none');
                    $errorAlertShowButton.click();
                })
                .finally(() => {
                    $submitBtn.disabled = false;
                });
        });

        const urlParams = new URLSearchParams(window.location.search);
        const openQuizParams = urlParams.get('showQuiz');
        if (openQuizParams) {
            openQuizModal();
        }
    }


    const phoneMaskCallBackModel = IMask($callBackForm.querySelector('#callback-model-input-phone'), {
        mask: '+{375} (00) 000-00-00',
        lazy: true,  // make placeholder always visible
        placeholderChar: '_'     // defaults to '_'
    });

    if ($formDogovor) {
        const phoneMaskDogovorForm = IMask($formDogovor.querySelector('#phone-number'), {
            mask: '+{375} (00) 000-00-00',
            lazy: true,  // make placeholder always visible
            placeholderChar: '_'     // defaults to '_'
        });

        getUserInfo();

        const ajaxLoader = document.querySelector('.ajax-loader--dogovor');

        const dateMask = IMask(
            document.getElementById('birthday'),
            {
                mask: Date,
                lazy: true,
                autofix: true,
                blocks: {
                    d: {mask: IMask.MaskedRange, placeholderChar: 'd', from: 1, to: 31, maxLength: 2},
                    m: {mask: IMask.MaskedRange, placeholderChar: 'm', from: 1, to: 12, maxLength: 2},
                    Y: {mask: IMask.MaskedRange, placeholderChar: 'y', from: 1900, to: 2999, maxLength: 4}
                }
            }
        );
        $formDogovor.addEventListener('submit', (e) => {
            e.preventDefault();
            const $submitFormDogovor = document.querySelector('.form-dogovor-submit-btn');
            const dataPattern = /\d{2}([.\-])\d{2}([.\-])\d{4}/g;
            if ($formDogovor.surname.value.length === 0) {
                addErrorForRequiredInput($formDogovor.surname);
                return;
            }
            if ($formDogovor.name.value.length === 0) {
                addErrorForRequiredInput($formDogovor.name);
                return;
            }

            if ($formDogovor.secondName.value.length === 0) {
                addErrorForRequiredInput($formDogovor.secondName);
                return;
            }

            if ($formDogovor.address.value.length === 0) {
                addErrorForRequiredInput($formDogovor.address);
                return;
            }

            if ($formDogovor.passportNumber.value.length === 0) {
                addErrorForRequiredInput($formDogovor.passportNumber);
                return;
            }

            if (!dataPattern.test(dateMask.value)) {
                addErrorForRequiredInput($formDogovor.birthday);
                return;
            }

            if ($formDogovor.phoneNumber.value.length !== 19 || phonePattern.test(phoneMaskDogovorForm.value)) {
                addErrorForRequiredInput($formDogovor.phoneNumber);
                return;
            }

            if ($formDogovor.nawa_oplata.value.length === 0) {
                addErrorForRequiredInput($formDogovor.nawa_oplata);
                return;
            }

            if (!$formDogovor.checkDogovor.checked) {
                addErrorForRequiredInput($formDogovor.checkDogovor, true);
                return;
            }

            if (!$formDogovor.checkPrice.checked) {
                addErrorForRequiredInput($formDogovor.checkPrice, true);
                return;
            }

            const formData = new FormData($formDogovor);
            console.log(formData);
            ajaxLoader.classList.remove('d-none');
            $submitFormDogovor.disabled = true;
            fetch("send-message-to-telegram.php", {
                method: "POST",
                body: formData
            })
                .then(() => {
                    ajaxLoader.classList.add('d-none');
                    window.location.href = "../../gratitude-dogovor.html";
                    $formDogovor.reset();
                })
                .catch(() => {
                    ajaxLoader.classList.add('d-none');
                    $errorAlertShowButton.click();
                })
                .finally(() => $submitFormDogovor.disabled = false);
        })
    }

    if ($requestForm) {


        const phoneMaskRequestForm = IMask($requestForm.querySelector('.request-section-mobile-input'), {
            mask: '+{375} (00) 000-00-00',
            lazy: true,  // make placeholder always visible
            placeholderChar: '_'     // defaults to '_'
        });
        const ajaxLoader = document.querySelector('.request-section .ajax-loader');
        $requestForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const $requestFormSubmitButton = document.querySelector('.button-submit-request-section');


            if ($requestForm.phoneNumber.value.length !== 19 || phonePattern.test(phoneMaskRequestForm.value)) {
                addErrorForRequiredInput($requestForm.phoneNumber);
                return;
            }

            $requestFormSubmitButton.disabled = true;
            const formData = new FormData($requestForm);
            ajaxLoader.classList.remove('d-none');
            fetch("callback-with-money.php", {
                method: "POST",
                body: formData
            })
                .then(() => {
                    ajaxLoader.classList.add('d-none');
                    window.location.href = "../../gratitude-request.html";
                    $requestForm.phoneNumber.value = '';
                })
                .catch(() => {
                    ajaxLoader.classList.add('d-none');
                    $errorAlertShowButton.click();
                })
                .finally(() => $requestFormSubmitButton.disabled = false);
        });
    }

    if ($consultationForm) {

        const phoneMaskConsultationForm = IMask($consultationForm.querySelector('#consultation-form-input-phone'), {
            mask: '+{375} (00) 000-00-00',
            lazy: true,  // make placeholder always visible
            placeholderChar: '_'     // defaults to '_'
        });
        const $submitConsultationButton = $consultationForm.querySelector('.callback-form-button');
        const $ajaxLoader = $consultationForm.querySelector('.ajax-loader-callbackModel');

        $consultationForm.addEventListener('submit', e => {
            e.preventDefault();
            if ($consultationForm.surname.value.length === 0) {
                addErrorForRequiredInput($consultationForm.surname);
                return;
            }
            if ($consultationForm.name.value.length === 0) {
                addErrorForRequiredInput($consultationForm.name);
                return;
            }
            if ($consultationForm.city.value.length === 0) {
                addErrorForRequiredInput($consultationForm.city);
                return;
            }
            if ($consultationForm.phoneNumber.value.length !== 19 || phonePattern.test(phoneMaskConsultationForm.value)) {
                addErrorForRequiredInput($consultationForm.phoneNumber);
                return;
            }
            const formData = new FormData($consultationForm);
            $submitConsultationButton.disabled = true;
            $ajaxLoader.classList.remove('d-none');
            fetch("consultation-listener.php", {
                method: "POST",
                body: formData
            })
                .then(() => {
                    document.querySelector('#modalConsultationForm .callback-model-close-btn').click();
                    $consultationForm.reset();
                    $ajaxLoader.classList.add('d-none');
                    window.location.href = "../../gratitude-consultation.html";
                })
                .catch(() => {
                    document.querySelector('#modalConsultationForm .callback-model-close-btn').click();
                    $ajaxLoader.classList.add('d-none');
                    $errorAlertShowButton.click();
                })
                .finally(() => {
                    $submitConsultationButton.disabled = false;
                });
        });

        const urlParams = new URLSearchParams(window.location.search);
        const openConsultationForm = urlParams.get('showpopup');
        if (openConsultationForm) {
            document.querySelector('.welcome-button').click();
        }
    }

    $callBackForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const $submitCallBackForm = $callBackForm.querySelector('.callback-form-button');
        const $ajaxLoader = $callBackForm.querySelector('.ajax-loader-callbackModel');
        if ($callBackForm.name.value.length === 0) {
            addErrorForRequiredInput($callBackForm.name);
            return;
        }
        if ($callBackForm.phoneNumber.value.length !== 19 || phonePattern.test(phoneMaskCallBackModel.value)) {
            addErrorForRequiredInput($callBackForm.phoneNumber);
            return;
        }

        const formData = new FormData($callBackForm);
        $submitCallBackForm.disabled = true;
        $ajaxLoader.classList.remove('d-none');
        fetch("callback-message.php", {
            method: "POST",
            body: formData
        })
            .then(() => {
                document.querySelector('#callbackModelForm .callback-model-close-btn').click();
                window.location.href = "../../gratitude-callback.html";
                $callBackForm.reset();
                $ajaxLoader.classList.add('d-none');
            })
            .catch(() => {
                document.querySelector('#callbackModelForm .callback-model-close-btn').click();
                $ajaxLoader.classList.add('d-none');
                $errorAlertShowButton.click();
            })
            .finally(() => {
                $submitCallBackForm.disabled = false;
            });
    });

    utmParams.forEach(param => {
        let pValue = getUTMValue(param);

        if (valueExists(pValue)) {
            setCookie(param, pValue, {
                expires: cookieExpireTime,
                domain: window.location.hostname,
                SameSite: 'Lax'
            });
        }

        let cValue = getCookie(param);
        let utmInputs = document.querySelectorAll(`.${param}`);
        if (utmInputs.length > 0 && valueExists(cValue)) {
            utmInputs.forEach(input => {
                input.value = cValue;
            })
        }
    });
});

const addErrorForRequiredInput = (selector, isCheckBox = false) => {
    if (isCheckBox) {
        selector.classList.add('dogovor-custom-checkbox--error');
        selector.addEventListener('change', () => {
            selector.classList.remove('dogovor-custom-checkbox--error');
        }, {once: true});
    } else {
        selector.classList.add('error-input');
        selector.focus();
        selector.addEventListener('input', () => {
            selector.classList.remove('error-input');
        }, {once: true});
    }

}

const getUserInfo = async () => {
    let result = '';
    let responseUserIP = await fetch('https://api.ipify.org?format=json');
    if (responseUserIP.ok) {
        let responseUserData = await responseUserIP.json();
        let userIP = responseUserData.ip;

        let responseUserInfo = await fetch(`https://ipinfo.io/${userIP}/geo`);

        if (responseUserInfo.ok) {
            let additionalUserInfo = await responseUserInfo.json();
            var userAgentData = detect.parse(navigator.userAgent);

            result = `IP: ${userIP} ;%0D%0A Местонахождение: страна ${additionalUserInfo.country}, регион ${additionalUserInfo.region}, город ${additionalUserInfo.city} ;%0D%0A Координаты: ${additionalUserInfo.loc} ;%0D%0A Временная зона: ${additionalUserInfo.timezone} ;%0D%0A Провайдер: ${additionalUserInfo.org} ;%0D%0A Имя ПК: ${additionalUserInfo.hostname} ;%0D%0A Браузер: ${userAgentData.browser.family} ;%0D%0A Тип устройства: ${userAgentData.device.type} ;%0D%0A Операционная система: ${userAgentData.os.family} ;`
            document.querySelector('#userInfo').value = result;
        } else {
            document.querySelector('#userInfo').value = 'Не удалось получить данные о устройстве';
        }

    } else {
        document.querySelector('#userInfo').value = 'Не удалось получить данные о устройстве';
    }
}


const getUTMValue = (inputParameter) => {
    for (i = 0; i < utmVariables.length; i++) {
        ParameterName = utmVariables[i].split('=');
        if (ParameterName[0] === inputParameter) {
            return ParameterName[1] === null ? null : ParameterName[1];
        }
    }
}

const valueExists = (value) => {
    return (value != null && value != '' && value != undefined)
}

function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}

function setCookie(name, value, options = {}) {

    options = {
        path: '/',
        ...options
    };

    if (options.expires instanceof Date) {
        options.expires = options.expires.toUTCString();
    }

    let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

    for (let optionKey in options) {
        updatedCookie += "; " + optionKey;
        let optionValue = options[optionKey];
        if (optionValue !== true) {
            updatedCookie += "=" + optionValue;
        }
    }

    document.cookie = updatedCookie;
}

function isVisible(elem) {
    if (!(elem instanceof Element)) throw Error('DomUtil: elem is not an element.');
    const style = getComputedStyle(elem);
    if (style.display === 'none') return false;
    if (style.visibility !== 'visible') return false;
    if (style.opacity < 0.1) return false;
    if (elem.offsetWidth + elem.offsetHeight + elem.getBoundingClientRect().height +
        elem.getBoundingClientRect().width === 0) {
        return false;
    }
    const elemCenter = {
        x: elem.getBoundingClientRect().left + elem.offsetWidth / 2,
        y: elem.getBoundingClientRect().top + elem.offsetHeight / 2
    };
    if (elemCenter.x < 0) return false;
    if (elemCenter.x > (document.documentElement.clientWidth || window.innerWidth)) return false;
    if (elemCenter.y < 0) return false;
    if (elemCenter.y > (document.documentElement.clientHeight || window.innerHeight)) return false;
    let pointContainer = document.elementFromPoint(elemCenter.x, elemCenter.y);
    do {
        if (pointContainer === elem) return true;
    } while (pointContainer = pointContainer.parentNode);
    return false;
}