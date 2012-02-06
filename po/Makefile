APPLICATION = webinria
MSGFMT = /usr/local/Cellar/gettext/0.18.1.1/bin/msgfmt --statistics -v -o
MSGFMTSOL = /usr/local/Cellar/gettext/0.18.1.1/bin/msgfmt -v -o
MSGMERGE = /usr/local/Cellar/gettext/0.18.1.1/bin/msgmerge -U

all: install

%.po:
	@echo "Updating .po files from .pot:"
	${MSGMERGE} $@ webinria.pot

install: *.po
	@echo "Checking for os ... ${OSTYPE}"; \
	if test "${OSTYPE}" = "solaris"; then \
		echo "You'll probably get some warnings on Solaris. This is normal."; \
	fi; \
	for LOCALE in `ls *.po | sed 's/\.[^.]*$$//g'`; do \
		if test $${LOCALE}.po = "messages.po"; then \
			continue; \
		fi; \
		echo "Compiling locale $${LOCALE}:"; \
		if ./shtool mkdir -p ../locale/$${LOCALE}/LC_MESSAGES; then \
			if test "${OSTYPE}" = "solaris"; then \
				if ${MSGFMTSOL} ../locale/$${LOCALE}/LC_MESSAGES/${APPLICATION}.mo $${LOCALE}.po; then \
					echo "  ... done"; \
					echo; \
				else \
					echo "  ... FAILED"; \
					echo; \
				fi \
			else \
				if ${MSGFMT} ../locale/$${LOCALE}/LC_MESSAGES/${APPLICATION}.mo $${LOCALE}.po; then \
					echo "  ... done"; \
					echo; \
				else \
					echo "  ... FAILED"; \
					echo; \
				fi \
			fi; \
		else \
			echo "Could not create locale directory for $${LOCALE}."; \
		fi \
	done;

