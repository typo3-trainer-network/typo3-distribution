# TYPO3 Trainer Network Distribution

[![CI Status](https://github.com/typo3-trainer-network/typo3-distribution/workflows/CI/badge.svg?branch=main)](https://github.com/typo3-trainer-network/typo3-distribution/actions)

This TYPO3 distribution contains an example TYPO3 installation.
This installation includes all extensions and examples used during official trainings.

## Installation

1. Switch into the directory you with this distribution.
1. Run `composer install`
1. Run `composer typo3:server`
1. Open the TYPO3 backend: http://127.0.0.1:8080/typo3 and log in with the credentials found below
1. Open the TYPO3 frontend: http://127.0.0.1:8080

## Credentials

Backend administrator
- user name: `admin`
- password: `admin`

Install tool Password
- `itp`

## Compacting the database after a change

If you (a developer of this distribution) have changed the database and would like to
compact it before committing it, please run `composer typo3:db:compact`.

## License

The code is licensed under the Gnu General Public License V2.

The CSS is taken from Twitter Bootstrap and is licensed under the [MIT](https://opensource.org/licenses/MIT) License.
